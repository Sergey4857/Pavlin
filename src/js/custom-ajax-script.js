// jQuery(document).ready(function ($) {
//   $(document.body).on(
//     "removed_from_cart",
//     function (event, fragments, cart_hash, $button) {
//       // Вызываем функцию для обновления счетчика корзины
//       updateCartCount();
//     }
//   );

//   $(document.body).on("click", ".remove", function () {
//     var $this = $(this);

//     // Ваш код для удаления товара
//     // ...

//     // Не требуется явного обновления фрагмента корзины, так как WooCommerce обновит его автоматически
//   });

//   // Функция для обновления счетчика корзины
//   function updateCartCount() {
//     $.ajax({
//       type: "POST",
//       url: ajax_object.ajax_url,
//       data: { action: "update_cart_count" },
//       success: function (response) {
//         // Обновляем значение в div с id "cart-count"
//         $("#cart-count").text(response);
//       },
//       error: function (error) {
//         console.log(error); // Выводим ошибку в консоль для отладки
//       },
//     });
//   }
// });
