<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->is('dashboard') || request()->is('profile/*') ? 'active' : ''); ?>">
                    <i class="fa fa-laptop"></i> <span>Dashboard</span>
                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('page.index')); ?>" class="<?php echo e(request()->is('page') || request()->is('page/*') || request()->is('page_setting/*') ? 'active' : ''); ?>">
                    <i class="fa fa-cog"></i> <span>Settings</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('role.index')); ?>" class="<?php echo e(request()->is('role') || request()->is('role/create') || request()->is('role/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-tasks"></i> <span>Roles</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('user.index')); ?>" class="<?php echo e(request()->is('user') || request()->is('user/create') || request()->is('user/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('permission.index')); ?>" class="<?php echo e(request()->is('permission') || request()->is('permission/create') || request()->is('permission/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-lock"></i> <span>Permissions</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('coupon-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('coupon.index')); ?>" class="<?php echo e(request()->is('coupon') || request()->is('coupon/*')? 'active' : ''); ?>">
                    <i class="fa fa-gift"></i> <span>Coupons</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('service.index')); ?>" class="<?php echo e(request()->is('service') || request()->is('service/create') || request()->is('service/*/edit') || request()->is('service/*') ? 'active' : ''); ?>">
                    <i class="fa fa-wrench"></i> <span>Services</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slider-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('slider.index')); ?>" class="<?php echo e(request()->is('slider') || request()->is('slider/create') || request()->is('slider/*/edit') || request()->is('slider/*') ? 'active' : ''); ?>">
                    <i class="fa fa-sliders"></i> <span>Sliders</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('testimonial-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('testimonial.index')); ?>" class="<?php echo e(request()->is('testimonial') || request()->is('testimonial/create') || request()->is('testimonial/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-quote-right"></i> <span>Testimonial</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('package-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('package.index')); ?>" class="<?php echo e(request()->is('package') || request()->is('package/create') || request()->is('package/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-gift"></i> <span>Packages</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('team-list')): ?>
            <li class="treeview">
                <a href="<?php echo e(route('team.index')); ?>" class="<?php echo e(request()->is('team') || request()->is('team/create') || request()->is('team/*/edit') ? 'active' : ''); ?>">
                    <i class="fa fa-user-plus"></i> <span>Team</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </section>
</aside>
<?php /**PATH C:\xampp\htdocs\Calgary\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>