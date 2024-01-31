// function fullscreen
var fullscreenBtn = document.getElementById('fullscreenBtn');
fullscreenBtn.addEventListener('click', function () {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    }
  }
});

// function online or offline
var statusElement = document.getElementById('status');
updateOnlineStatus();

window.addEventListener('online', updateOnlineStatus);
window.addEventListener('offline', updateOnlineStatus);

function updateOnlineStatus() {
  if (navigator.onLine) {
    statusElement.textContent = 'Online';
  } else {
    statusElement.textContent = 'Offline';
  }
}
