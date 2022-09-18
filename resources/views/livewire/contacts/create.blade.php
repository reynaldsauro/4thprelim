<div>
    <div class="card border border-light">
        <div class="card-header" style="background-color: rgba(127, 169, 199, 0.527)">
            <h3 class="mt-2">Add Stories</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Story Name</label>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="contact_number">
                <label for="contact_number">Author</label>
                @error('contact_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.debounce.500ms="email">
                <label for="email">Email</label>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="address">
                <label for="address">Publisher</label>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="sim_card" class="form-select" wire:model.defer="sim_card">
                    <option hidden="true">Select Genre</option>
                    <option selected disabled>Genre</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Romance">Romance</option>
                    <option value="Horro">Horror</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                </select>
                <label for="sim_card">Genre</label>
                @error('sim_card')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addContact()">
                    Add Contact
                </button>
            </div>
        </div>
    </div>
</div>
