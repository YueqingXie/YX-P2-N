@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Order</h1>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="phone">Your phone number:</label>
    <input type="text" name="phone" id="phone" required>
    <label for="address">Your address:</label>
    <input type="text" name="address" id="address" required>
    <label for="delivery">Our delivery time:</label>
    <input type="text" name="delivery" id="delivery" required>

    <label for="rice">Choose type of rice:</label>
    <select name="rice" id="rice">
      <option value="Steam rice">Steam rice</option>
      <option value="Vegetable fried rice">Vegetable fried rice</option>
      <option value="Seafood fried rice">Seafood fried rice</option>
      <option value="Vegetable porridge">Vegetable porridge</option>
      <option value="Chicken Congee">Chicken Congee</option>
      <option value="Seafood congee">Seafood congee</option>
    </select>

    <label for="drinks">Choose drink:</label>
    <select name="drinks" id="drinks">
      <option value="Coke">Coke</option>
      <option value="Diet coke">Diet coke</option>
      <option value="Iced tea">Iced tea</option>
      <option value="Orange juice">Orange juice</option>
      <option value="Peach juice">Peach juice</option>
      <option value="Apple juice">Apple juice</option>
      <option value="Apple juice">Grape juice</option>
      <option value="Milk">Milk</option>
      <option value="Chocolate Milk">Chocolate Milk</option>
      <option value="Iced coffee">Iced coffee</option>
      <option value="Milk">Beer</option>
      <option value="Milk">Red wine</option>
    </select>

    <fieldset>
      <label>Dishes:</label>
      <input type="checkbox" name="dishes[]" value="Spicy Crayfish">Spicy Crayfish - 麻辣小龙虾<br />
      <input type="checkbox" name="dishes[]" value="Stewed Beef Brisket with Tomato">Stewed Beef Brisket with Tomato - 番茄牛腩<br />
      <input type="checkbox" name="dishes[]" value="Fried chicken chop">Fried chicken chop - 炸鸡排<br />
      <input type="checkbox" name="dishes[]" value="Boiled Meatballs">Boiled Meatballs - 汆丸子<br />
      <input type="checkbox" name="dishes[]" value="Spicy Shrimp Ball">Spicy Shrimp Ball - 麻辣虾球<br />
      <input type="checkbox" name="dishes[]" value="Mapo Tofu">Mapo Tofu - 麻婆豆腐<br />
      <input type="checkbox" name="dishes[]" value="Korean army stew">Korean army stew - 韩式部队锅<br />
      <input type="checkbox" name="dishes[]" value="Boiled fish">Boiled fish - 水煮鱼<br />
      <input type="checkbox" name="dishes[]" value="Candied sweet potatoes">Candied sweet potatoes - 拔丝地瓜<br />
      <input type="checkbox" name="dishes[]" value="Sweet and sour pork ribs">Sweet and sour pork ribs - 糖醋排骨<br />
      <input type="checkbox" name="dishes[]" value="Braised pork trotters with soybeans">Braised pork trotters with soybeans - 黄豆焖猪蹄<br />
      <input type="checkbox" name="dishes[]" value="Boiled Prawns">Boiled Prawns - 白灼大虾<br />
      <input type="checkbox" name="dishes[]" value="Chicken stewed with mushrooms">Chicken stewed with mushrooms - 小鸡炖蘑菇<br />
      <input type="checkbox" name="dishes[]" value="Toothpick Beef">Toothpick Beef - 牙签牛肉<br />
      <input type="checkbox" name="dishes[]" value="Red Bean Rice Cake">Red Bean Rice Cake - 红豆糍粑<br />
      <input type="checkbox" name="dishes[]" value="Enoki mushroom with garlic">Enoki mushroom with garlic - 蒜蓉金针菇<br />
      <input type="checkbox" name="dishes[]" value="Noodles with Soy Bean Paste">Noodles with Soy Bean Paste - 炸酱面<br />
      <input type="checkbox" name="dishes[]" value="Pineapple Sweet and Sour Pork">Pineapple Sweet and Sour Pork - 菠萝咕咾肉<br />
      <input type="checkbox" name="dishes[]" value="Fried Pork in Scoop">Fried Pork in Scoop - 锅包肉<br />
      <input type="checkbox" name="dishes[]" value="Coke Chicken Wings">Coke Chicken Wings - 可乐鸡翅<br />
      <input type="checkbox" name="dishes[]" value="Fried tofu">Fried tofu - 煎豆腐<br />
      <input type="checkbox" name="dishes[]" value="Chicken curry">Chicken curry - 咖喱鸡肉<br />
      <input type="checkbox" name="dishes[]" value="Spicy fried potato shreds">Spicy fried potato shreds - 辣炒土豆丝<br />
      <input type="checkbox" name="dishes[]" value="Yuxiang shredded pork">Yuxiang shredded pork - 鱼香肉丝<br />
      <input type="checkbox" name="dishes[]" value="Kung Pao Diced Pork">Kung Pao Diced Pork - 宫保肉丁<br />
      <input type="checkbox" name="dishes[]" value="Spicy Fried Clams">Spicy Fried Clams - 辣炒蚬子<br />
      <input type="checkbox" name="dishes[]" value="Shredded cabbage">Shredded cabbage - 手撕包菜<br />
      <input type="checkbox" name="dishes[]" value="Shredded Pork with Vegetables">Shredded Pork with Vegetables - 小炒肉<br />
      <input type="checkbox" name="dishes[]" value="Fried Larimichthys crocea">Fried Larimichthys crocea - 煎大黄花鱼<br />
      <input type="checkbox" name="dishes[]" value="Ribs soup">Ribs soup - 排骨汤<br />
      <input type="checkbox" name="dishes[]" value="Fried shrimp balls">Fried shrimp balls - 炸虾球<br />
      <input type="checkbox" name="dishes[]" value="Popcorn chicken">Popcorn chicken - 盐酥鸡<br />

    </fieldset>
    <input type="submit" value="Submit Order">
  </form>
</div>
@endsection