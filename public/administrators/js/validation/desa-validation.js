$("#inputusulan").validate({
     rules: {
        level_usulan:"required",
        volume: {
            required: true
        },
        jalan:"required",
        ket_nomor: {
            required: true
        },
        ket_lokasi: {
            required: true
        },
        link_maps: {
            required: true
        },
        status_lahan:"required",
        keterangan: {
            required: true
        },
        cp_nama: {
            required: true
        },
        cp_alamat: {
            required: true
        },
        cp_telp: {
            required: true
        },
    },
    //For custom messages
    messages: {
        level_usulan: {
            required: "Pilih Level Usulan"
        },
        volume: {
            required: "Masukkan Volume"
        },
        jalan: {
            required: "Pilih Jalan"
        },
        ket_nomor: {
            required: "Masukkan Keterangan Nomor"
        },
        ket_lokasi: {
            required: "Masukkan Keterangan Lokasi"
        },
        link_maps: {
            required: "Masukkan Link URL Maps Lokasi"
        },
        status_lahan: {
            required: "Pilih Status Lahan"
        },
        keterangan: {
            required: "Masukkan Keterangan"
        },
        cp_nama: {
            required: "Masukkan Nama Kontak"
        },
        cp_alamat: {
            required: "Masukkan Alamat Kontak"
        },
        cp_telp: {
            required: "Masukkan Nomor Telpon Kontak"
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