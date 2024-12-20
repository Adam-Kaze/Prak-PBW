<!-- Current: "bg-zinc-900 text-white", Default: "text-zinc-300 hover:bg-zinc-700 hover:text-white"
    aria-current="page"
-->
<a {{ $attributes }} class="{{ request()->fullUrlIs(url($href)) ? 'bg-zinc-700 text-white font-semibold' : 'text-zinc-300 hover:bg-zinc-800 hover:text-white' }} rounded-md px-3 py-2 text-sm">
    {{ $slot }}
</a>
