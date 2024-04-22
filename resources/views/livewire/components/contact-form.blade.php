<form method="POST"
      wire:submit="save"
>
    @csrf
    <div class="mb-4">
        <label for="name" class="form-label">Nom:</label>
        <input type="text" name="name" id="name" class="form-input" wire:model="name">
        @error('name')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-input" wire:model="email">
        @error('email')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="phone" class="form-label">Téléphone:</label>
        <input type="text" name="phone" id="phone" class="form-input" wire:model="phone">
        @error('phone')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="message" class="form-label">Message:</label>
        <textarea name="message" id="message" class="form-input" rows="4" wire:model="message"></textarea>
        @error('message')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-between">
        <button type="submit" class="bg-primary hover:bg-blue-700 text-light font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Envoyer
        </button>
    </div>
</form>
