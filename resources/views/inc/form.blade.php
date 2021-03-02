
    <form method="post" action="{{route('contact-form')}}">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input name="name" placeholder="Имя" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите Email</label>
            <input name="email" placeholder="Email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Введите тему</label>
            <input name="subject" placeholder="Тема" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Введите сообщение</label>
            <input name="message" placeholder="" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" name="button" class="btn btn-success">Готово</button>
        </div>

    </form>
