<a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }} ps-3">
    <i class="isax isax-user-octagon me-2"></i>Edit Profile
</a>

<a href="{{ route('admin.account-settings') }}" class="{{ request()->routeIs('admin.account-settings') ? 'active' : '' }}">
    <i class="isax isax-wallet-money me-2"></i>Account Settings
</a>

<a href="{{ route('admin.security-settings') }}" class="{{ request()->routeIs('admin.security-settings') ? 'active' : '' }}">
    <i class="isax isax-shield-tick me-2"></i>Security
</a>

<a href="{{ route('admin.plans-billings') }}" class="{{ request()->routeIs('admin.plans-billings') ? 'active' : '' }}">
    <i class="isax isax-star me-2"></i>Plans & Billing
</a>
