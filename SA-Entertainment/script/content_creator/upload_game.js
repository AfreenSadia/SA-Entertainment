function validateTitle() {
    var title = document.getElementById('title').value;
    if(title == null || title == undefined || title == '') {
      alert('Title is required');
      return;
    }
    if(title.length < 2) {
      alert('Title should be at least 2 characters long');
      return;
    }
}

function validateGenre() {
    var genre = document.getElementById('genre').value;
    if(genre == null || genre == undefined || genre == '') {
      alert('genre is required');
      return;
    }
}

function validateGameFile() {
    var gameFile = document.getElementById('gameFile').value;
    if(gameFile == null || gameFile == undefined || gameFile == '') {
      alert('gameFile is required');
      return;
    }
}