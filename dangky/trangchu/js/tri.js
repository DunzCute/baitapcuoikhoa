const listulr = [
    "https://cdnmedia.webthethao.vn/uploads/img/files/images/fullsize/2019/01/22/Esports/irelia.jpg",
    "https://phongvu.vn/cong-nghe/wp-content/uploads/2022/01/tuong-moi-lmht-zeri-1.jpg",
    "https://cdn.vn.garenanow.com/web/lol-product/home/images/Lan_h3lpm3/05_2019/Yuumi/Yuumi_1.jpg",
    "http://cdn.gametv.vn/gtv-photo/GTVNews/2019/10/api_cdn.gametv.vn-0c5866c175def618df00b3f0bac1ddec.jpg"
];
let i = 0;
  function getpreviousimg() {
    if (i === 0) {
      console.log("dont get previous image");
    } else {
      i -= 1;
    }
    console.log(i);
    let sliderEle= document.getElementById("slider")
    sliderEle.style.backgroundImage="url("+listulr[i] +")";
  }
  function getthenextimg() {
    if (i === listulr.length - 1) {
      console.log("cant get the next image");
    } else {
      i += 1;
     } 
     console.log(i);
     let sliderEle= document.getElementById("slider")
     sliderEle.style.backgroundImage="url("+listulr[i] +")";
  }

  const listComment = document.getElementById("id-list-comment");
  const inputComment = document.getElementById("input-comment");
  function comment() {
    const contentOfComment = inputComment.value;
  
    const newHTML =
      `<div class="item-commment">
        <div>Người lạ: ${contentOfComment}</div>
      </div>` + listComment.innerHTML;
  
    listComment.innerHTML = newHTML;
  }