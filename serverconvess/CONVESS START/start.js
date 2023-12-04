//var
let homepage = document.getElementById("homepage");
let notipage = document.getElementById("notipage");
let messpage = document.getElementById("messpage");
let profilepage = document.getElementById("profilepage");

function CHomePage() {
    if (homepage.style.display === "block") {
      homepage.style.display = "none";
    } else {
      homepage.style.display = "block";
      notipage.style.display = "none";
      messpage.style.display = "none";
      profilepage.style.display = "none";
    }
  }

function NotiPage() {
  if (notipage.style.display === "block") {
    notipage.style.display = "none";
  } else {
    notipage.style.display = "block";
    homepage.style.display = "none";
    messpage.style.display = "none";
    profilepage.style.display = "none";
  }
}

function MessPage() {
  if (messpage.style.display === "block") {
    messpage.style.display = "none";
  } else {
    messpage.style.display = "block";
    homepage.style.display = "none";
    notipage.style.display = "none";
    profilepage.style.display = "none";
  }
}

function ProfilePage() {
  if (profilepage.style.display === "block") {
    profilepage.style.display = "none";
  } else {
    profilepage.style.display = "block";
    homepage.style.display = "none";
    notipage.style.display = "none";
    messpage.style.display = "none";
  }
}
