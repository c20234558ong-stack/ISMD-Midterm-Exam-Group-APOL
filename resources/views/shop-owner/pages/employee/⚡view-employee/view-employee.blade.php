
<div>
  <div class="bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-xl shadow overflow-hidden">
  <!-- Card Header -->
  <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 dark:border-neutral-700">
    <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Employees</h3>
    <a href="{{ route('shop-owner.employee.create') }}"
       class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-md bg-green-600 text-white hover:bg-green-700">
      + Add Employee
    </a>
  </div>

  <!-- Table -->
  <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
    <thead class="bg-gray-50 dark:bg-neutral-800">
      <tr>
        <th class="px-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Name</th>
        <th class="px-6 py-3 text-start text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Role</th>
        <th class="px-6 py-3 text-end text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">Actions</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
      @foreach($this->employees as $employee)
        <tr class="hover:bg-gray-50 dark:hover:bg-neutral-700">
          <td class="px-6 py-2 text-sm text-gray-800 dark:text-neutral-200">{{ $employee->name }}</td>
          <td class="px-6 py-2 text-sm text-gray-500 dark:text-neutral-400">
            {{ $employee->roles->pluck('name')->implode(', ') }}
          </td>
          <td class="px-6 py-2 text-end">
            <a href="{{ route('shop-owner.employee.edit', $employee->id) }}"
               class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-md bg-blue-600 text-white hover:bg-blue-700">
              Edit
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi --}}
</div>
