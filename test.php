<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.popup { display: none; }
.popup.open { display: block; }
.blocker {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: ' ';
    background: rgba(0,0,0,.5);
}
.popup .contents {
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #FFF;
    position: fixed;
    top: 50vh;
    left: 50vw;
    transform: translate(-50%, -50%);
}</style>
</head>
<body>
<button onclick="showPopup()">Open Popup</button>
<div class="popup">
  <div class="blocker" onclick="hidePopup()"></div>
  <div class="contents">This is popup</div>
</div>
<script>
const popup = document.querySelector('.popup');
function showPopup() {
  popup.classList.add('open');
}
function hidePopup() {
  popup.classList.remove('open');
}
</script>
</body>
</html>