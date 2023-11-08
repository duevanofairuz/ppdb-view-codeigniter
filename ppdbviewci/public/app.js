function validate() {
    if (document.forms["ppdb"]["Nama"].value == "") {
      alert("Minimal isi nama!");
      document.forms["ppdb"]["Nama"].focus();
      return false;
    }
    if (document.forms["ppdb"]["NISN"].value == "") {
      alert("Minimal isi NISN!");
      document.forms["ppdb"]["NISN"].focus();
      return false;
    }
    if (document.forms["ppdb"]["Tempat"].value == "") {
      alert("Minimal isi Tempat!");
      document.forms["ppdb"]["Tempat"].focus();
      return false;
    }

  }