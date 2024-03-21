window.onload = function() {
    // Отримуємо всі заголовки таблиці
    var thElements = document.querySelectorAll(".ydc-table th");

    // Додаємо обробник подій для кожного заголовка
    thElements.forEach(function(th) {
        th.addEventListener('click', function() {
            var table = th.closest('table');
            var tbody = table.querySelector('tbody');
            var index = Array.from(th.parentNode.children).indexOf(th);
            var orderedRows = Array.from(tbody.querySelectorAll('tr')).sort(function(rowA, rowB) {
                var cellA = rowA.cells[index].textContent;
                var cellB = rowB.cells[index].textContent;

                // Перевірка, якщо числове порівняння можливе 
                if(!isNaN(cellA) && !isNaN(cellB)) {
                    return cellA - cellB;
                }

                // За замовчуванням застосовуємо порівнювання строк
                return cellA.localeCompare(cellB);
            });

            // Якщо заголовок вже був клікнутий раніше, змінемо порядок сортування.
            if (th.asc) {
                orderedRows = orderedRows.reverse();
            }
            th.asc = !th.asc;    

            // Додаемо впорядковані рядки назад до tbody.
            orderedRows.forEach(function(row) {
                tbody.appendChild(row);
            });
        });
    });
};
