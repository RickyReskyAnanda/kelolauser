$("#kamususulan").validate({
    rules: {
        tipe:"required",
        nm_pekerjaan: {
            required: true
        },
        harga: {
            required: true
        },
        satuan:"required",
        skpd:"required",
        bidang_urusan:"required",
        nama_kelompok:"required"
    },
    //For custom messages
    messages: {
        tipe: {
            required: "Pilih Tipe Kegiatan"
        },
        nm_pekerjaan: {
            required: "Masukkan Nama Pekerjaan"
        },
        harga: {
            required: "Masukkan Harga"
        },
        satuan: {
            required: "Pilih Satuan"
        },
        skpd: {
            required: "Pilih SKPD Pelaksana"
        },
        bidang_urusan: {
            required: "Pilih Bidang Urusan"
        },
        nama_kelompok: {
            required: "Pilih Nama Kelompok"
        },
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
});

$("#manajemenuser").validate({
    rules: {
        name: {
            required: true
        },
        level:"required",
        skpd:"required",
        distrik:"required",
        desa:"required",
        username: {
            required: true,
            minlength:6,
            maxlength:32,
        },
        password: {
            required: true,
            minlength:6,
            maxlength:32,
        },
        confirmation: {
            required: true,
            minlength:6,
            maxlength:32,
        },
    },
    //For custom messages
    messages: {
        name: {
            required: "Masukkan Nama User"
        },
        level: {
            required: "Pilih Level Admin User"
        },
        skpd: {
            required: "Pilih SKPD User"
        },
        distrik: {
            required: "Pilih Distrik User"
        },
        desa: {
            required: "Pilih Desa User"
        },
        status: {
            required: "Pilih Status"
        },
        username: {
            required: "Masukkan Username",
            minlength: "Masukkan Username Minimal 6 Karakter",
            maxlength: "Masukkan Username Maksimal 32 Karakter"
        },
        password: {
            required: "Masukkan Password",
            minlength: "Masukkan Password Minimal 6 Karakter",
            maxlength: "Masukkan Password Maksimal 32 Karakter"
        },
        confirmation: {
            required: "Masukkan Konfirmasi Password",
            minlength: "Masukkan Konfirmasi Password Minimal 6 Karakter",
            maxlength: "Masukkan Konfirmasi Password Maksimal 32 Karakter"
        },
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
});

$("#skoring").validate({
    rules: {
        nama_kelompok: {
            required: true
        },
        faktor1_nilai1: {
            required: true
        },
        faktor1_nilai2: {
            required: true
        },
        faktor1_nilai3: {
            required: true
        },
        faktor1_nilai4: {
            required: true
        },
        faktor2_nilai1: {
            required: true
        },
        faktor2_nilai2: {
            required: true
        },
        faktor2_nilai3: {
            required: true
        },
        faktor2_nilai4: {
            required: true
        },
        faktor3_nilai1: {
            required: true
        },
        faktor3_nilai2: {
            required: true
        },
        faktor3_nilai3: {
            required: true
        },
        faktor3_nilai4: {
            required: true
        }
    },
    //For custom messages
    messages: {
        nama_kelompok: {
            required: "Masukkan minimal 1 nama kelompok"
        },
        faktor1_nilai1: {
            required: "Masukkan Nilai 1"
        },
        faktor1_nilai2: {
            required: "Masukkan Nilai 2"
        },
        faktor1_nilai3: {
            required: "Masukkan Nilai 3"
        },
        faktor1_nilai4: {
            required: "Masukkan Nilai 4"
        },
        faktor2_nilai1: {
            required: "Masukkan Nilai 1"
        },
        faktor2_nilai2: {
            required: "Masukkan Nilai 2"
        },
        faktor2_nilai3: {
            required: "Masukkan Nilai 3"
        },
        faktor2_nilai4: {
            required: "Masukkan Nilai 4"
        },
        faktor3_nilai1: {
            required: "Masukkan Nilai 1"
        },
        faktor3_nilai2: {
            required: "Masukkan Nilai 2"
        },
        faktor3_nilai3: {
            required: "Masukkan Nilai 3"
        },
        faktor3_nilai4: {
            required: "Masukkan Nilai 4"
        },
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
});

$("#formjalan").validate({
    rules: {
        kd_desa:"required",
        nm_jalan: {
            required: true
        },
        status:"required",
    },
    //For custom messages
    messages: {
        kd_desa: {
            required: "Pilih Desa"
        },
        nm_jalan: {
            required: "Masukkan Nama Jalan"
        },
        status: {
            required: "Pilih Status"
        },
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
});

$("#formdesa").validate({
    rules: {
        kd_distrik:"required",
        nm_desa: {
            required: true
        },
        sts:"required",
    },
    //For custom messages
    messages: {
        kd_distrik: {
            required: "Pilih Distrik"
        },
        nm_desa:{
            required:"Masukkan Nama Desa"
        },
        sts: {
            required: "Pilih Status"
        },
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
});


$("#formdistrik").validate({
    rules: {
        nm_distrik: {
            required: true
        },
        sts:"required",
    },
    //For custom messages
    messages: {
        nm_distrik: {
            required: "Masukkan Nama Distrik"
        },
        sts: {
            required: "Pilih Status"
        },
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
});
$("#formaspirasi").validate({
    rules: {
        desa:"required",
        bidang:"required",
    },
    //For custom messages
    messages: {
        desa: {
            required: "Pilih Distrik dan Desa"
        },
        bidang: {
            required: "Pilih Bidang"
        },
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
});