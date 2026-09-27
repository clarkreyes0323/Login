* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #2E7D32;
  padding: 20px;
}

.container {
  width: 900px;
  min-height: 520px;
  display: flex;
  background: #fff;
  overflow: hidden;
  border-radius: 5px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.form-container {
  width: 50%;
  padding: 45px 35px;
  background: white;
}

.form-box {
  width: 100%;
}

.form-box.signup {
  display: none;
}

.title {
  position: relative;
  display: inline-block;
  font-size: 28px;
  font-weight: 600;
  color: #333;
  margin-bottom: 35px;
}

.title::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -6px;
  width: 28px;
  height: 3px;
  background: #F2A900;
}

.input-box {
  position: relative;
  width: 100%;
  margin-bottom: 22px;
}

.input-box i {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  color: #007A33;
  font-size: 18px;
}

.input-box input {
  width: 100%;
  height: 42px;
  padding: 0 5px 0 32px;
  border: none;
  border-bottom: 2px solid #ccc;
  outline: none;
  font-size: 16px;
  color: #333;
  transition: 0.3s;
}

.input-box input:focus {
  border-color: #F2A900;
}

.input-box input::placeholder {
  color: #777;
}

.forgot {
  margin: -5px 0 35px;
}

.forgot a {
  color: #808080;
  text-decoration: none;
  font-size: 15px;
  font-weight: 500;
}

.forgot a:hover {
  text-decoration: underline;
}

button {
  width: 100%;
  height: 50px;
  border: none;
  border-radius: 5px;
  background: #007A33;
  color: white;
  font-size: 17px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  background: #F2A900;
}

.signup-text {
  margin-top: 30px;
  text-align: center;
  color: #555;
  font-size: 15px;
}

.signup-text a {
  color: #808080;
  text-decoration: none;
  font-weight: 500;
}

.signup-text a:hover {
  text-decoration: underline;
}

.image-container {
  width: 50%;
  min-height: 520px;

  background:
    url("images/images.jpg");

  background-size: cover;
  background-position: center;

  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.image-content {
  color: white;
  padding: 30px;
}

.image-content h2 {
  font-size: 30px;
  line-height: 1.3;
  margin-bottom: 15px;
  max-width: 400px;
}

.image-content p {
  font-size: 16px;
  font-weight: 500;
}

@media (max-width: 750px) {

  body {
    padding: 0;
  }

  .container {
    width: 100%;
    min-height: 100vh;
    border-radius: 0;
  }

  .image-container {
    display: none;
  }

  .form-container {
    width: 100%;
    padding: 50px 30px;
    display: flex;
    align-items: center;
  }
}

@media (max-width: 450px) {

  .form-container {
    padding: 40px 22px;
  }

  .title {
    font-size: 25px;
  }

  .image-content h2 {
    font-size: 25px;
  }
}
