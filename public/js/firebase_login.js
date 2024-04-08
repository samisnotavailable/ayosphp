import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth, signInWithEmailAndPassword, sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";

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
const password = document.getElementById('password');
const forgotPassword = document.getElementById('forgot_password');

const signInUser = evt => {
    evt.preventDefault();

    signInWithEmailAndPassword(auth, email.value, password.value)
        .then((credentials) => {
            console.log(credentials);
            console.log("Redirecting...");

            window.location.href = adminIndexRoute;
        })
        .catch((error) => {
            alert(error.message);
            console.error(error.code);
            console.error(error.message);
        })
}

const forgotPasswordFunc = () => {
    sendPasswordResetEmail(auth, email.value)
        .then(() => {
            alert("A Password Reset link has been sent to your email.");
        })
        .catch((error) => {
            console.error(error.code);
            console.error(error.message);
        })
}

mainForm.addEventListener('submit', signInUser);
forgotPassword.addEventListener('click', forgotPasswordFunc);
