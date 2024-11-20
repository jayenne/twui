<div>
    <form wire:submit="save">
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Title</span>
            <x-ts-input type="text" wire:model="title" />
            <p
                class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm"
            >
                Please provide a title.
            </p>
        </label>

        <div>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>

        <label class="block">
            <span class="block text-sm font-medium text-slate-700"
                >Content</span
            >
            <x-ts-input type="text" wire:model="content" />
            <p
                class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm"
            >
                Please provide some content.
            </p>
        </label>
        <div>
            @error('content')
            <span class="error">{{ $message }}</span> @enderror
        </div>

        <x-ts-button class="float-right" type="submit">Create</x-ts-button>
    </form>
</div>
