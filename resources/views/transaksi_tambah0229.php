<form action="{{ route('transaksi.store') }}" method="post">
    @csrf
    id: <input type="text" name="id">
    id_pelanggan: <input type="text" name="id_pelanggan">
    id_barang: <input type="text" name="id_barang">
    <button type="submit">simpan</button>

</form>