var firebaseConfig = {
    apiKey: "AIzaSyAGK1IlKHqGM9M-Y5V01sYql_kauJOxDe0",
    authDomain: "bddtest-e0333.firebaseapp.com",
    projectId: "bddtest-e0333",
    storageBucket: "bddtest-e0333.appspot.com",
    messagingSenderId: "789532579096",
    appId: "1:789532579096:web:663ca481ae4100ab5d3a6d",
    measurementId: "G-DT0QM611LL"
  };

  // Initialize Firebase
firebase.initializeApp(firebaseConfig);

var actionCodeSettings = {
  // URL you want to redirect back to. The domain (www.example.com) for this
  // URL must be in the authorized domains list in the Firebase Console.
  url: 'https://www.example.com/finishSignUp?cartId=1234',
  // This must be true.
  handleCodeInApp: true,
  iOS: {
    bundleId: 'com.example.ios'
  },
  android: {
    packageName: 'com.example.android',
    installApp: true,
    minimumVersion: '12'
  },
  dynamicLinkDomain: 'example.page.link'
};