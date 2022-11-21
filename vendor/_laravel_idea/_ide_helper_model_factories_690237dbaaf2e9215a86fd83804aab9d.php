<?php //f87f983c14c8e7ef42e9ab1d1bf8b010
/** @noinspection all */

namespace Database\Factories {

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     * @method $this hasUsers(int $count = 1, $attributes = [])
     */
    class BlogFactory extends Factory {}

    /**
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     */
    class UserFactory extends Factory {}
}
