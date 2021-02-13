function validateForm() {
            if (document.forms["formHubungi"]["np"].value == "") {
                alert("Nama Pengirim Tidak Boleh Kosong");
                document.forms["formHubungi"]["np"].focus();
                return false;
            }
            if (document.forms["formHubungi"]["ep"].value == "") {
                alert("Email Tidak Boleh Kosong");
                document.forms["formHubungi"]["ep"].focus();
                return false;
            }
            if (document.forms["formHubungi"]["kp"].selectedIndex < 1) {
                alert("Pilih Kategori.");
                document.forms["formHubungi"]["kp"].focus();
                return false;
            }
            if (document.forms["formHubungi"]["sp"].value == "") {
                alert("Subjek Pesan Tidak Boleh Kosong");
                document.forms["formHubungi"]["sp"].focus();
                return false;
            }
            if (document.forms["formHubungi"]["ip"].value == "") {
                alert("Isi Pesan Tidak Boleh Kosong");
                document.forms["formHubungi"]["ip"].focus();
                return false;
            }
        }

       
    