<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<h1>Laravel TALL Stack</h1>
</p>

## Includes

- [Laravel Framework](http://laravel.com)
- [Tailwind CSS + UI](https://tailwindcss.com/)
- [Laravel Livewire](https://laravel-livewire.com/)
- [Alpine.js](https://github.com/alpinejs/alpine)
- [Vessel](https://vessel.shippingdocker.com/)

##Developer Deploy

Clone repo:

```$bash
git clone https://github.com/mediclab/tall-stack.git && cd tall-stack
```

Create your .env file:

```$bash
cp .env.example .env
```

Use **Vessel** to deploy into **Docker**:

```$bash
sh ./vessel start
```

Install **Composer** requirements:

```$bash
sh ./vessel composer install
```

Install NPM requirements:

```$bash
sh ./vessel npm i
```

Deploy static files:

```$bash
sh ./vessel npm run dev
```

Apply migrations:

```$bash
sh ./vessel artisan migrate
```
 
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
