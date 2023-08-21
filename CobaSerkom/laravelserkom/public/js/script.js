// Function Harga Tiket
function hargaTiket() {
    // variabel untuk memilih elemen berdasarkan atribut "id"
    const kategori = document.getElementById("wisata").value;
    const hargaTiket = document.getElementById("harga_tiket");

    // Percabangan pada dropdown untuk memilih kategori wisata dan menampilkan harga tiket
    if (kategori == "Rainbow Rafting") {
        hargaTiket.value = 150000
    } else if (kategori == "Curug Bengkawah") {
        hargaTiket.value = 10000
    } else if (kategori == "Taman Langit") {
        hargaTiket.value = 25000;
    }
}

// JQuery Menghitung Total Biaya
$(document).ready(function () {
    // function untuk membuat button hitung total
    $(document).on('click', '.hitungTotalBayar', function () {
        // Mendeklarasikan variabel berdasarkan "id"
        // ParseInt untuk mengkonversi string menjadi integer
        var dewasa = parseInt($("#dewasa").val());
        var anakanak = parseInt($("#anakanak").val());
        var harga_tiket = parseInt($("#harga_tiket").val());

        // Variabel dan kondisional perhitungan
        // Percabangan
        var harga_pengunjung_dewasa = dewasa * harga_tiket;
        if (anakanak > 0) {     // apabila jml pengunjung anak-anak > 0
            var potongan_harga = harga_tiket * 0.5;     // Potongan Harga 50%
            var potongan_harga_anakanak = anakanak * potongan_harga;
            var total_harga_pengunjung_anakanak = (anakanak * harga_tiket) - potongan_harga_anakanak;
            // Total bayar dengan pengunjung anak-anak
            var total_bayar = harga_pengunjung_dewasa + total_harga_pengunjung_anakanak;
        } else {
            // Total bayar tanpa pengunjung anak-anak
            var total_bayar = harga_pengunjung_dewasa + anakanak;
        }
        console.log(anakanak)
        // Mencetak hasil perhitungan
        $("#total_bayar").val(total_bayar);
    });
});

// Fungsi untuk mendisabled button Pesan Tiket
function enableButton2() {
    document.getElementById("button2").disabled = false;
}

