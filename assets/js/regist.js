function validateRegist() {

    if (document.forms["formRegistrasi"]["np"].value == "") {
        alert("Nama Lengkap Tidak Boleh Kosong");
        document.forms["formRegistrasi"]["np"].focus();
        return false;
    }
    if (document.forms["formRegistrasi"]["ep"].value == "") {
        alert("Email Tidak Boleh Kosong");
        document.forms["formRegistrasi"]["ep"].focus();
        return false;
    }
    
    if (document.forms["formRegistrasi"]["telp"].value == "") {
        alert("No HP Tidak Boleh Kosong");
        document.forms["formRegistrasi"]["telp"].focus();
        return false;
    }

    if (document.forms["formRegistrasi"]["prov"].selectedIndex < 1) {
        alert("Pilih Provinsi.");
        document.forms["formRegistrasi"]["prov"].focus();
        return false;
    }
    
    if (document.forms["formRegistrasi"]["alamat"].value == "") {
        alert("Alamat Tidak Boleh Kosong");
        document.forms["formRegistrasi"]["alamat"].focus();
        return false;
    }

    if (document.forms["formRegistrasi"]["pos"].value == "") {
        alert("Kode pos Tidak Boleh Kosong");
        document.forms["formRegistrasi"]["pos"].focus();
        return false;
    }
   
}