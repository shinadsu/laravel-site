import './bootstrap';

import '../sass/app.scss'

import * as bootstrap from 'bootstrap';

const nameEl = document.querySelector("#name");
const emailEl = document.querySelector("#email");
const companyNameEl = document.querySelector("#company-name");
const messageEl = document.querySelector("#message");

const form = document.querySelector("#submit-form");

function checkValidations() {
  let letters = /^[a-zA-Z\s]*$/;
  const name = nameEl.value.trim();
  const email = emailEl.value.trim();
  const companyName = companyNameEl.value.trim();
  const message = messageEl.value.trim();
  if (name === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
  if (email === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
}

function reset() {
  nameEl = "";
  emailEl = "";
  companyNameEl = "";
  messageEl = "";
  document.querySelector(".name-error").innerText = "";
}

let createPostForm = document.querySelector("#create-post-form");
let createPostMedia = document.querySelector("#create-post-media");
let createPostText = document.querySelector("#create-post-txt");
let createPostSubmitBtn = document.querySelector("#create-post-submit-btn");
let mediaLabel = document.querySelector('[for="create-post-media"]');
let postsContainer = document.querySelector("#posts-container");
let mediaContainer = document.querySelector("#create-post-media-wrap");

mediaLabel.addEventListener("keypress", (e) => {
	if (e.key === "Enter") {
		e.target.click();
	}
});

createPostForm.addEventListener("submit", handleSubmit, false);
createPostMedia.addEventListener("input", handleAddImg, false);

createPostText.addEventListener("input", watchInputs, false);
createPostMedia.addEventListener("change", watchInputs, false);

function watchInputs() {
	if (createPostText.value === "" && createPostMedia.value === "") {
		createPostSubmitBtn.setAttribute("disabled", "true");
		createPostForm.removeEventListener("submit", handleSubmit, false);
	} else {
		createPostSubmitBtn.removeAttribute("disabled");
		createPostForm.addEventListener("submit", handleSubmit, false);
	}
}

function generateImgPreview(file) {
	let reader = new FileReader();

	reader.readAsDataURL(file);
	reader.onloadend = () => {
		let preview = `
			<figure class="create-post__media-item">
				<button type="button" aria-label="delete image">
					<img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/close.svg" alt="" />
				</button>
				<img src="${reader.result}" alt="" />
			</figure>	
		`;

		mediaContainer.innerHTML = preview;

		let closeBtn = mediaContainer.querySelector("button");
		closeBtn.addEventListener("click", removeCreatePostImg, false);
	};
}

function handleAddImg(e) {
	const file = e.target.files[0];

	if (!isValidImage(file)) {
		createPostMedia.value = "";
		return;
	}

	generateImgPreview(file);
}

watchInputs();

/* Generate post functions */
async function handleSubmit(e) {
	e.preventDefault();

	let postContent = {
		text: createPostText.value,
		img: createPostMedia.files[0]
	};

	let post = await createPost(postContent);
	postsContainer.insertAdjacentHTML("afterbegin", post);
	cleanCreatePost();
}

async function createPost(postContent) {
	let header = generateHeader();
	let body = await generateBody(postContent);
	let footer = generateFooter();

	let post = `
		<article class="post">
			<img class="post__avatar" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/avatar-tumblr.png" alt="" />
		
			<div class="post__content">
				${header}
				${body}
				${footer}
			</div>
		</article>
	`;

	return post;
}

function generateHeader() {
	let header = `
		<header class="post__header">
			<p class="post__user">galactiqangel</p>

			<div class="post__meta">
				<p class="post__reblogs">3,908</p>

				<button class="post__header-btn">
					<img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/reblog-tumblr.svg" alt="" />
				</button>
				<button class="post__header-btn">
					<img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/heart-tumblr.svg" alt="" />
				</button>
			</div>
		</header>
	`;

	return header;
}

async function generateBody(postContent) {
	let bodyContent = await generateBodyContent(postContent);

	let body = `
		<div class="post__body">
			${bodyContent}
		</div>
	`;

	return body;
}

async function generateBodyContent(postContent) {
	// https://benhoyt.com/writings/dont-sanitize-do-escape/
	let content = "";

	if (postContent.img) {
		content += await generatePostImg(postContent.img);
	}

	if (postContent.text) {
		// https://stackoverflow.com/questions/863779/how-to-add-line-breaks-to-an-html-textarea
		content += `
			<p class="post__text">
				${sanitizeText(postContent.text)}
			</p>
		`;
	}

	return content;
}

function generatePostImg(fileImg) {
	// https://codepen.io/Anveio/pen/XzYBzX
	let reader = new FileReader();

	return new Promise((resolve, reject) => {
		reader.onerror = () => {
			reader.abort();
			reject(new DOMException("Problem parsing input file."));
		};

		reader.onload = () => {
			resolve(`<img class="post__img" src="${reader.result}" alt="" />`);
		};
		reader.readAsDataURL(fileImg);
	});
}

function generateFooter() {
	let footer = `
	<div class="post__footer">
		<span>#2010s</span>
		<span>#tumblr</span>
		<span>#codepen</span>
	</div>
	`;

	return footer;
}

/* Sanitization functions  */
function sanitizeText(text) {
	// https://remarkablemark.org/blog/2019/11/29/javascript-sanitize-html/
	var element = document.createElement("div");
	element.innerText = text.trim();
	return element.innerHTML;
}

/* Clean functions */
function cleanCreatePost() {
	createPostText.value = "";
	removeCreatePostImg();
	watchInputs();
}

function removeCreatePostImg() {
	mediaContainer.innerHTML = "";
	createPostMedia.value = "";
	watchInputs();
}

/* Image validation images */
function isValidImage(file) {
	let isValid = isValidFileSize(file) && isValidFileSize(file);
	return isValid;
}

function isValidFileType(file) {
	const fileTypes = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
	return fileTypes.includes(file.type);
}

function isValidFileSize(file) {
	if (file.size > 1048576) {
		alert("Please upload an image smaller than 1MB");
	}
	return file.size < 1048576;
}
