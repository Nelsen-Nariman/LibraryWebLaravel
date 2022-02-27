let validate = () => {
    let judul = document.getElementById('Input1')
    let penulis = document.getElementById('Input2')
    let halaman = document.getElementById('Input3')
    let terbit = document.getElementById('Input4')
    
    let errorMsg = []
    // Jadi semua error bakal ditampung disini.

    // Validasi

    vJudul(judul, errorMsg)
    vPenulis(penulis, errorMsg)
    vHalaman(halaman, errorMsg)
    vTerbit(terbit, errorMsg)

    if (errorMsg.length === 0){
        alert('Insert Book Success!')
    } else{
        alert(errorMsg.join('\n'))
        // Buat bikin kalo ada error msg lebih dari satu, dia bakal tampil kebawah.

        // Kalau gak dikasih \n jadinya koma
    }

}

let vJudul = (judul, errorMsg) => {
    if (judul.value === ""){
        errorMsg.push('Judul tidak boleh kosong')
    } 
    else if (judul.value.length < 5 || judul.value.length > 20) {
        errorMsg.push('Judul buku harus 5 - 20 karakter')
    }
}

let vPenulis = (penulis, errorMsg) => {
    // Wajib diisi
    if (penulis.value === '') {
        errorMsg.push('Penulis buku tidak boleh kosong')
    } // Password dibawah 8 digit
    else if (penulis.value.length < 5 || judul.value.length > 20) {
        errorMsg.push('Penulis buku harus 5 - 20 karakter')
    }
}

let vHalaman = (halaman, errorMsg) => {
    if (halaman.value === '') {
        errorMsg.push('Halaman tidak boleh kosong')
    }
    else if(halaman.value <= 0){
        errorMsg.push('Halaman harus lebih dari 0')
    }
}

let vTerbit = (terbit, errorMsg) => {
    if (terbit.value === '') {
        errorMsg.push('Tahun terbit tidak boleh kosong')
    }
    else if(terbit.value < 2000 || terbit.value > 2021){
        errorMsg.push('Tahun terbit harus diantara 2000 - 2021')
    }
} 

