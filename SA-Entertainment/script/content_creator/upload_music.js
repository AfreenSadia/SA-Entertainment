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

function validateArtist() {
  var author = document.getElementById('artist').value;
  if(author == null || author == undefined || author == '') {
    alert('Artist is required');
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

function validateMusicFile() {
    var musicFile = document.getElementById('musicFile').value;
    if(musicFile == null || musicFile == undefined || musicFile == '') {
      alert('musicFile is required');
      return;
    }
}