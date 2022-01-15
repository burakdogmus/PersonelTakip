const qrcode = window.qrcode;

const video = document.createElement("video");
const canvasElement = document.getElementById("qr-canvas");
const canvas = canvasElement.getContext("2d");

const qrResult = document.getElementById("qr-result");
const outputData = document.getElementById("outputData");
const btnScanQR = document.getElementById("btn-scan-qr");

let scanning = false;

qrcode.callback = res => {
  if (res) {
    outputData.innerText = res;
    scanning = false;

    video.srcObject.getTracks().forEach(track => {
      track.stop();
    });

    qrResult.hidden = false;
    canvasElement.hidden = true;
    btnScanQR.hidden = false;

    //$.post('processqr.php', { data: $(res).attr('data')} );//gelen degeri gonderme denemesi

   // var data = new URLSearchParams();
   // data.append("data", res);
    //var url = "https://tiffanytomato.tech/personeltakip/processqr.php?" + data.toString();
   // window.location.href(url);
    //alert(url);

    //var path = "http://localhost/UserSpice53/processqr.php?data="+res;    
    //$.ajax({ url: path, method: "POST", data: {formData: formData} });
  } /*else{  var data = new URLSearchParams();
    data.append("data", "C2FDACC7B252104582A20C6F3F8161B9E6CC3BE631E9495D1474F9041EF04395");
    var url = "http://localhost/UserSpice53/processqr.php?" + data.toString();
    location.href = url;} */
};

btnScanQR.onclick = () => {
  navigator.mediaDevices
    .getUserMedia({ video: { facingMode: "environment" } })
    .then(function(stream) {
      scanning = true;
      qrResult.hidden = true;
      btnScanQR.hidden = true;
      canvasElement.hidden = false;
      video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
      video.srcObject = stream;
      video.play();
      tick();
      scan();
    });
};

function tick() {
  canvasElement.height = video.videoHeight;
  canvasElement.width = video.videoWidth;
  canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

  scanning && requestAnimationFrame(tick);
}

function scan() {
  try {
    qrcode.decode();
  } catch (e) {
    setTimeout(scan, 300);
  }
}
