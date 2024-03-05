<div class="flex items-center mb-4">
    @foreach ($items as $item)
        <div class="ms-2">
            <input name="{{ $name }}[]" id="default-checkbox" type="checkbox" value="{{ $item['value'] }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900">{{ $item['name'] }}</label>
        </div>
    @endforeach
</div>