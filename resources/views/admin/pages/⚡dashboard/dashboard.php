<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    public int $totalUsers;
    public int $totalRoles;
    public int $totalOwners;
    public int $totalEmployees;

    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalRoles = Role::count();
        $this->totalOwners = User::whereHas('roles', function ($query) {
            $query->where('name', 'shop-owner');
        })->count();
        $this->totalEmployees = User::whereHas('roles', function ($query) {
            $query->where('name', 'employee');
        })->count();
    }
};
