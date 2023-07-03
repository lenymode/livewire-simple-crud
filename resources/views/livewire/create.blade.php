<div class="card">
  <div class="card-body">
    <form>
      <div class="form-group mb-3">
        <label for="title">Title:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" wire:model="title">
        @error('title')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label for="description">Description:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" wire:model="description" placeholder="Enter Description"></textarea>
        @error('description')
          <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="d-grid gap-2">
        <button wire:click.prevent="storePost()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancelPost()" class="btn btn-secondary btn-block">Cancel</button>
      </div>
    </form>
  </div>
</div>
<style>
.card {
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-body {
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

.form-control {
  border-radius: 4px;
  border: 1px solid #ccc;
  padding: 8px 12px;
}

.is-invalid {
  border-color: #dc3545;
}

.text-danger {
  color: #dc3545;
}

textarea {
  height: 120px;
  resize: vertical;
}

.btn {
  border-radius: 4px;
  padding: 10px 20px;
  font-weight: bold;
  cursor: pointer;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
  border: none;
}

.btn-secondary {
  background-color: #6c757d;
  color: #fff;
  border: none;
}

.btn-block {
  display: block;
  width: 100%;
  margin-top: 10px;
}

.d-grid {
  gap: 10px;
}

</style>
