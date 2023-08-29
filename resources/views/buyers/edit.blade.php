<h1>Edit Buyer</h1>

<form action="{{ route('buyers.update', $buyer->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="username">Username</label>
    <input type="text" name="username" value="{{ $buyer->username }}">

    <label for="username">Password</label>
    <input type="text" name="password" value="{{ $buyer->password }}">

    <label for="city">City</label>
    <input type="text" name="city" value="{{ $buyer->city }}">

    <label for="country">Country</label>
    <input type="text" name="country" value="{{ $buyer->country }}">

    <button type="submit">Update</button>
</form>