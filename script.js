const activepage = document.querySelector(".activepage");
const pages = document.querySelectorAll(".pg");
const homepage = document.querySelector(".home");
const applicationpage = document.querySelector(".application");
const u_ApplicationPage = document.querySelector(".u-application");
const statuspage = document.querySelector(".status");
const tutorialpage = document.querySelector(".tutorial");
const support = document.querySelector(".support");
const applicationcontent = document.querySelector(".applicationcontent");
const supportpage = document.querySelector(".support-Page");

const homepageactive = function () {
  homepage.classList.add("activepage");
  applicationpage.classList.remove("activepage");
  //   applicationpage.classList.add("hidden");
  u_ApplicationPage.classList.remove("activepage");
  statuspage.classList.remove("activepage");
  tutorialpage.classList.remove("activepage");
  support.classList.remove("activepage");
  applicationcontent.classList.add("hidden");
  supportpage.classList.add("hidden");
};

const applicationpageactive = function () {
  homepage.classList.add('hidden');
  applicationpage.classList.add("activepage");
  homepage.classList.remove("activepage");
  u_ApplicationPage.classList.remove("activepage");
  statuspage.classList.remove("activepage");
  tutorialpage.classList.remove("activepage");
  support.classList.remove("activepage");
  applicationcontent.classList.remove("hidden");
  supportpage.classList.add("hidden");
};

const u_ApplicationpageActive = function () {
  homepage.classList.add('hidden');
  homepage.classList.remove("activepage");
  applicationpage.classList.remove("activepage");
  u_ApplicationPage.classList.add("activepage");
  statuspage.classList.remove("activepage");
  tutorialpage.classList.remove("activepage");
  support.classList.remove("activepage");
  applicationcontent.classList.add("hidden");
  supportpage.classList.add("hidden");
};
const statuspageActive = function () {
  homepage.classList.remove("activepage");
  applicationpage.classList.remove("activepage");
  homepage.classList.add('hidden');
  u_ApplicationPage.classList.remove("activepage");
  statuspage.classList.add("activepage");
  tutorialpage.classList.remove("activepage");
  applicationcontent.classList.add("hidden");
  support.classList.remove("activepage");
  supportpage.classList.add("hidden");
};
const TutorialpageActive = function () {
  homepage.classList.remove("activepage");
  homepage.classList.add('hidden');
  applicationpage.classList.remove("activepage");
  u_ApplicationPage.classList.remove("activepage");
  statuspage.classList.remove("activepage");
  tutorialpage.classList.add("activepage");
  applicationcontent.classList.add("hidden");
  support.classList.remove("activepage");
  supportpage.classList.add("hidden");
};
const supportpageActive = function () {
  homepage.classList.remove("activepage");
  applicationpage.classList.remove("activepage");
  u_ApplicationPage.classList.remove("activepage");
  statuspage.classList.remove("activepage");
  homepage.classList.add('hidden');
  applicationcontent.classList.add("hidden");
  tutorialpage.classList.remove("activepage");
  support.classList.add("activepage");
  supportpage.classList.remove("hidden");
};

homepage.addEventListener("click", homepageactive);
applicationpage.addEventListener("click", applicationpageactive);
u_ApplicationPage.addEventListener("click", u_ApplicationpageActive);
statuspage.addEventListener("click", statuspageActive);
tutorialpage.addEventListener("click", TutorialpageActive);
support.addEventListener("click", supportpageActive);
