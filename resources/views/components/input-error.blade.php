@props(['messages'])

@if ($messages)
<style>
    .loginBox {
  position: relative;
  top: 55%;
  left: 50%;
  float: left;
  transform: translate(-50%, -50%);
  width: 350px;
  height: 600px;
  box-sizing: border-box;
  background: transparent;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
  border-radius: 5px;
  transition: 0.5s;
}
</style>
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1 text-danger']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
