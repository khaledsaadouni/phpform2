setTimeout(() => {
  const a = document.querySelector('#div10')
  a.removeChild(a.firstElementChild);
  const nouv = document.createElement("span")
  nouv.style.color = "red"
  nouv.innerHTML = `vous avez depasse le temps estimee veuillez ressayer`;
  a.appendChild(nouv);
}, 10000)
