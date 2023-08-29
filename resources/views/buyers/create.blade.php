<h1>Buyer</h1>
<div>
    <form action="/buyers/store" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="username"> Username </label>
        <input type="text" name="username">

        <label for="password"> Password </label>
        <input type="text" name="password">

        <label for="city">City</label>
        <input type="text" name="city">

        <label for="country">Country</label>
        <input type="text" name="country">

        <input type="submit" value="submit">
    </form>
</div>