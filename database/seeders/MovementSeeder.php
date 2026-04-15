<?php

namespace Database\Seeders;

use App\Models\Movement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movements = [
            [
                'name' => 'Push-ups',
                'description' => 'A classic bodyweight exercise that strengthens the chest, shoulders, and triceps.',
                'category' => 'Upper Body',
                'instructions' => 'Start in a plank position with hands shoulder-width apart. Lower your body until your chest nearly touches the floor, then push back up to the starting position. Keep your body straight throughout the movement.',
            ],
            [
                'name' => 'Squats',
                'description' => 'A fundamental lower body exercise that engages the quadriceps, hamstrings, and glutes.',
                'category' => 'Lower Body',
                'instructions' => 'Stand with feet shoulder-width apart. Lower your body by bending your knees and hips as if sitting back into a chair. Keep your chest up and knees aligned over your toes. Return to standing position.',
            ],
            [
                'name' => 'Plank',
                'description' => 'An isometric core exercise that strengthens the abdominals, lower back, and shoulders.',
                'category' => 'Core',
                'instructions' => 'Position yourself face-down with forearms on the ground, shoulder-width apart. Keep your body in a straight line from head to heels. Hold this position while engaging your core.',
            ],
            [
                'name' => 'Lunges',
                'description' => 'A unilateral leg exercise that targets the quadriceps, glutes, and hamstrings.',
                'category' => 'Lower Body',
                'instructions' => 'Stand upright and step forward with one leg. Lower your hips until both knees are bent at approximately 90 degrees. Push back to the starting position and repeat with the other leg.',
            ],
            [
                'name' => 'Burpees',
                'description' => 'A full-body, high-intensity exercise combining cardio and strength training.',
                'category' => 'Full Body',
                'instructions' => 'Start in a standing position. Drop into a squat position with your hands on the floor. Kick your feet back into a plank position. Perform a push-up. Return to squat position and jump upward.',
            ],
            [
                'name' => 'Mountain Climbers',
                'description' => 'A dynamic cardio exercise targeting the core, shoulders, and legs.',
                'category' => 'Cardio',
                'instructions' => 'Start in a plank position. Alternately drive your knees toward your chest in a running motion. Maintain a steady, controlled pace keeping your hips level.',
            ],
            [
                'name' => 'Jumping Jacks',
                'description' => 'A classic aerobic exercise that elevates heart rate and engages multiple muscle groups.',
                'category' => 'Cardio',
                'instructions' => 'Stand with feet together and arms at your sides. Jump while spreading your feet and raising your arms overhead. Return to starting position and repeat.',
            ],
            [
                'name' => 'Bicycle Crunches',
                'description' => 'An effective core exercise targeting the rectus abdominals and obliques.',
                'category' => 'Core',
                'instructions' => 'Lie on your back with hands behind your head. Bring your right elbow toward your left knee while straightening your right leg. Alternate sides in a pedaling motion.',
            ],
            [
                'name' => 'Deadlifts',
                'description' => 'A compound movement targeting the posterior chain including glutes and hamstrings.',
                'category' => 'Lower Body',
                'instructions' => 'Stand with feet hip-width apart, barbell in front of you. Bend at the hips and knees to grip the bar. Drive through your heels and extend your hips and knees to lift the barbell.',
            ],
            [
                'name' => 'Dumbbell Rows',
                'description' => 'An upper body exercise that strengthens the back muscles and improves posture.',
                'category' => 'Upper Body',
                'instructions' => 'Hold a dumbbell in one hand while in a lunge position. Pull the dumbbell up to your hip, squeezing your shoulder blade. Lower the weight and repeat on both sides.',
            ],
            [
                'name' => 'Tricep Dips',
                'description' => 'An effective upper body exercise targeting the triceps and chest.',
                'category' => 'Upper Body',
                'instructions' => 'Position your hands on a bench or chair behind you with legs extended. Lower your body by bending your elbows. Push back up to the starting position.',
            ],
            [
                'name' => 'Glute Bridges',
                'description' => 'An isolation exercise that specifically targets and activates the glutes.',
                'category' => 'Lower Body',
                'instructions' => 'Lie on your back with knees bent and feet on the floor. Drive through your heels to lift your hips, squeezing your glutes at the top. Lower hips back down and repeat.',
            ],
        ];

        foreach ($movements as $movement) {
            Movement::create($movement);
        }
    }
}
