<a href="{{ route('admin.book.edit',$model) }}"class = "btn btn-warning">Edit</a>
<button href="{{ route('admin.book.destroy',$model) }}"class = 
"btn btn-danger" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah kamu yakin hapus data ini?',
            text: "Data yang di hapus tidak bisa di kembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus Saja!'
            }).then((result) => {
            if (result.value) {

                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();

                Swal.fire(
                'Terhapus!',
                'Data kamu berhasil dihapus.',
                'success'
                )
            }
            })

    })
</script>