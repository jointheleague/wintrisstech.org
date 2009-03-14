function showHide(action) {
  if (action=='hide') {
    setTimeout("document.getElementById('donors').style.visibility='hidden'",250);
    } else {
      document.getElementById('donors').style.visibility='visible';
    }
}