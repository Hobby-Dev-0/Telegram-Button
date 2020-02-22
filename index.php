<!DOCTYPE html> 
<html> 
      
<head> 
    <link rel="stylesheet" href="styles.css">
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script type="text/javascript">
        const reddirect = (type) => {
            $.ajax({url:"getId.php",success:function(res){
                // Ожидаем получить при клике от вас закодированный ВЫБРАННЫЙ ВАМИ id юзера
                if(res === "none") {
                    // если вы вернете пустую строку "none" мы реддиректнем без ID
                    window.location.href = `https://teleg.run/samopoznanie_ru_bot`
                    return
                }
                if(type === 'Self') {
                    window.location.href = `https://teleg.run/samopoznanie_ru_bot?start=${res}`
                }
                if(type === 'Trainings') {
                    window.location.href = `https://teleg.run/vsetreningi_ru_bot?start=${res}`
                }
            }})
        }
        // NOTE: Я не являюсь PHP разработчиком, скорее всего мой подход неверный.
        // Это пример использования
        // Пожалуйста, адаптируйте данную логику под ваши реали.
    </script>  
</head> 
  
<body style="text-align:center;"> 
    <button class='telegamBtn' onclick="reddirect('Self')">Самопознание.ру</button>
    <button class='telegamBtn' onclick="reddirect('Trainings')">ВсеТренинги.ру</button>
</body> 
  
</html> 