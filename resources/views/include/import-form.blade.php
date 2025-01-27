{{--  --}}
<div class="form-group">
    <label for="amount">اسم العميل <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('client') is-invalid @enderror" id="employee" wire:model="client">
    @error('client') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}
<div class="form-group">
    <label for="amount">المبلغ <span class="tx-danger">*</span></label>
    <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" wire:model="amount">
    @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}
<div class="form-group">
    <label for="amount">المقابل <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('reason') is-invalid @enderror" id="reason" wire:model="reason">
    @error('reason') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}
<div class="form-group">
    <label for="receipt">رقم الايصال <span class="tx-danger">*</span></label>
    <input type="number" class="form-control @error('receipt') is-invalid @enderror" id="receipt" wire:model="receipt">
    @error('receipt') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- date--}}
<div class="form-group">
    <label for="date">التاريخ</label>
    <input type="text" class="form-control @error('date') is-invalid @enderror" wire:model="date" placeholder="YY-MM-DD"></input>
    @error('date') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}