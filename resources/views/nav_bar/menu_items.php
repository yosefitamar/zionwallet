<?php $current_page = $_SERVER['REQUEST_URI']; ?>
<div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <a href="/" class="rounded-md <?php echo $current_page == '/' ? 'bg-gray-900' : ''; ?> px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
        <a href="/assets" class="rounded-md <?php echo $current_page == '/assets' ? 'bg-gray-900' : ''; ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Patrimônio</a>
        <a href="#" class="rounded-md <?php echo $current_page == '#' ? 'bg-gray-900' : ''; ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Compra e Venda</a>
        <a href="#" class="rounded-md <?php echo $current_page == '#' ? 'bg-gray-900' : ''; ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dividendos</a>
    </div>
</div>