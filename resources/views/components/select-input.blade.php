<div class="max-w-sm mx-auto">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">{{ $label }}</label>
    <select name="{{ $name }}" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>{{ $label }}</option>
      @foreach ($items as $item)
        <option value="{{ $item['value'] }}">{{ $item['name'] }}</option>
      @endforeach
      
    </select>
  </div>
  