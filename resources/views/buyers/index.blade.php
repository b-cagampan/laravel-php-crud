<table>
    <tr>
        <td>Username</td>
        <td>City</td>
        <td>Country</td>
    </tr>
    @foreach($buyers as $buyer)
    <tr>
        <td>{{ $buyer->username }}</td>
        <td>{{ $buyer->city }}</td>
        <td>{{ $buyer->country }}</td>
        <td><form action="{{ route('buyers.delete', $buyer->id) }}" method="post">
                <a href="{{ route('buyers.edit', $buyer->id) }}">Edit</a>
                @csrf 
                @method('delete')
                <button type="submit">delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>