<div class="d-flex">

    <a href="{{ route('listBarang.edit', ['listBarang' => $barang->id]) }}" class="btn btn-warning btn-sm me-2"><i class="bi-pencil-square"></i></a>
    <div>
        <form action="{{ route('listBarang.destroy', ['listBarang' => $barang->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-rounded bg-danger btn-outline-light btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
