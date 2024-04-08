import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyBuhTpdmdqqYvoLezBjMjFXAaGqhpvejzI",
    authDomain: "ayos-app-25ebb.firebaseapp.com",
    projectId: "ayos-app-25ebb",
    storageBucket: "ayos-app-25ebb.appspot.com",
    messagingSenderId: "721814593296",
    appId: "1:721814593296:web:5cb6eb598301d6e7378f95",
    measurementId: "G-6VDDHPRG7V"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

const mainForm = document.getElementById('mainForm');
const email = document.getElementById('email');
const firstName = document.getElementById('first_name');
const middleName = document.getElementById('middle_name');
const lastName = document.getElementById('last_name');
const password = document.getElementById('password');

const registerUser = evt => {
    evt.preventDefault();

    createUserWithEmailAndPassword(auth, email.value, password.value)
        .then((credentials) => {
            console.log(credentials);
            console.log("Redirecting...");

            window.location.href = "/login";
        })
        .catch((error) => {
            alert(error.message);
            console.error(error.code);
            console.error(error.message);
        })
}

mainForm.addEventListener('submit', registerUser);
