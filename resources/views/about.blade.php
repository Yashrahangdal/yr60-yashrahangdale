
<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-gray-50 dark:bg-gray-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
            <img
              src="images/post-header-image.jpeg"
              class="object-cover object-center"
            />
          </div>

          <!-- Post Header Content -->
          <div class="px-5 lg:px-0">
            <!-- Article Information -->
            <div
              class="mx-auto mb-8 max-w-prose border-b border-gray-300/70 pb-8 pt-10 text-lg sm:pt-16"
            >
              <a
                href="{{ url('/projects/technology')}}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
                >{{ __('Technology') }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-gray-900 decoration-red-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
              >
                Apple to Turn IPhones Into Payment Terminals in Fintech Push button
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-gray-600">
                Apple today debuted iPhone 15 Pro and iPhone 15 Pro Max, designed with aerospace-grade titanium that’s strong yet lightweight to deliver Apple’s lightest Pro models ever. The new design also features contoured edges and a customisable Action button, allowing users to personalise their iPhone experience. Powerful camera upgrades enable the equivalent of seven pro lenses with incredible image quality, including a more advanced 48MP Main camera system that now supports the new super-high-resolution 24MP default, the next generation of portraits with Focus and Depth Control, improvements to Night mode and Smart HDR, and an all-new 5x Telephoto camera exclusively on iPhone 15 Pro Max. A17 Pro unlocks next-level gaming experiences and pro performance. The new USB‑C connector is supercharged with USB 3 speeds — up to 20x faster than USB 2 — and together with new video formats, enables powerful pro workflows that were not possible before.
                </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="images/author.jpeg"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-gray-500 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-gray-700 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename')) }}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-gray-500">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-gray-500">15 min read</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="px-5 lg:px-0">
          <!-- Post Content -->
          <!-- Uses the official Tailwind CSS Typography plugin -->
          <div
            class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
          >
            <p>
              Yash Rahangdale
            </p>
            <h2>My Aim</h2>
            <p>
             A good student . 
            </p>
            <p>
            Aspiring to become a successful developer is an exciting journey that combines passion, skill, and continuous learning. Here’s a detailed look at what that path might entail:

Foundational Knowledge: Start with a strong grasp of programming fundamentals. Languages like Python, Java, or JavaScript are excellent for beginners and can lead to various career paths.

Building Projects: Apply your skills by working on personal or open-source projects. This not only enhances your coding abilities but also builds a portfolio that showcases your work to potential employers.

Continuous Learning: The tech industry is ever-evolving, so stay updated with the latest trends and technologies. Online courses, coding bootcamps, and tutorials can help you expand your skill set.

Networking: Connect with other developers through meetups, online forums, or social media. Networking can open doors to job opportunities and collaborations that enhance your learning experience.

Internships and Work Experience: Seek internships or entry-level positions to gain practical experience. This is invaluable for understanding real-world applications of your skills and for building professional relationships.

Problem-Solving Skills: Focus on improving your problem-solving abilities. Participate in coding challenges and hackathons to sharpen your skills and learn to think critically under pressure.

Soft Skills: Develop communication and teamwork skills. Being able to articulate your ideas and collaborate with others is essential in a professional environment.

Understanding Best Practices: Familiarize yourself with software development methodologies like Agile and tools like Git for version control. Knowing industry standards will make you a more effective team member.

Seeking Feedback: Regularly seek feedback on your code from peers or mentors. Constructive criticism can provide insights that help you grow and improve your coding practices.

Career Goals: Set clear, achievable goals for your career. Whether you aspire to be a front-end developer, back-end engineer, or data scientist, having a direction will help you focus your efforts.
            </p>
            <figure>
              <img src="images/post-content-image.jpeg" />
              <figcaption>
               hardly doing my job .
              </figcaption>
            </figure>
            
            <h2>Problem Solver</h2>
            <h3>Finding solution for the problem</h3>
            <p>
             
            </p>
            <blockquote>
              <p>
              Problem-solving in programming is about breaking down complex issues into manageable parts and finding efficient solutions. Here are some strategies to minimize code complexity:

Understand the Problem: Take time to fully comprehend the problem before jumping into coding. Write down requirements and constraints to clarify your goals.

Break It Down: Divide the problem into smaller, more manageable sub-problems. Tackle each part individually, which simplifies your approach and makes debugging easier.

Use Clear Algorithms: Choose or design algorithms that are well-suited for the task. Simple algorithms often perform better and are easier to implement and maintain.

Modular Design: Write modular code by creating functions or classes that handle specific tasks. This promotes reusability and makes it easier to read and understand your code.

DRY Principle: Follow the "Don't Repeat Yourself" principle. Avoid code duplication by abstracting common functionalities into reusable components.

Consistent Naming Conventions: Use clear and consistent naming for variables, functions, and classes. This makes your code more readable and easier to follow.

Commenting and Documentation: Write comments to explain complex logic or decisions. Proper documentation helps others (and future you) understand the code quickly.

Refactor Regularly: Regularly review and refactor your code to improve clarity and efficiency. Look for opportunities to simplify or optimize your implementations.

Test-Driven Development (TDD): Implement tests before writing the code. This encourages you to think through your design and helps ensure that your solutions are robust.

Seek Feedback: Collaborate with peers or seek code reviews. Fresh perspectives can highlight areas of complexity you might have overlooked.
              </p>
            </blockquote>
            
            
           
          </div>

          <!-- Post Footer -->
          <footer
            class="divide-y-gray-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
          >
            <!-- Tags -->
            <ul class="-m-1 flex flex-wrap justify-start pb-8 sm:pb-10">
              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Trends
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Tips
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lists
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lessons
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Learnings
                  </span>
                </a>
              </li>
            </ul>

            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
              <div class="flex items-center justify-between">
                <span class="text-lg font-medium text-gray-900"> Share </span>

                <!-- Social Links -->
                <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>

            <!-- Author Details -->
            <div class="py-8 sm:py-10">
              <div class="flex w-full items-center justify-between">
                <div class="flex flex-col sm:flex-row">
                  <!-- Image -->
                  <div class="flex-shrink-0">
                    <div class="relative w-fit">
                      <img
                        class="h-20 w-20 rounded-2xl object-cover object-center sm:h-24 sm:w-24"
                        src="images/author.jpeg"
                        alt=""
                      />
                      <span
                        class="absolute inset-0 rounded-2xl shadow-inner"
                        aria-hidden="true"
                      ></span>
                    </div>
                  </div>

                  <!-- Content -->
                  <div class="mt-5 text-left sm:ml-6 sm:mt-0">
                    <div class="flex items-center justify-between">
                      <div class="'flex flex-col">
                        <p class="text-xs uppercase tracking-widest text-red-600">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-gray-900 md:tracking-tight lg:leading-tight"
                        >
                          {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-gray-500">
                    Hello! I’m Yash Rahangdale, currently a second-year student pursuing Computer Science with a specialization in AI and Machine Learning. I’m a tech enthusiast with a keen interest in data structures and algorithms, as well as problem-solving. I enjoy exploring new technologies and tackling challenges that enhance my skills in the ever-evolving tech landscape.
                    </p>

                    <!-- Author Social Links -->
                    <ul class="mt-3.5 flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                        <li>
                            <a href="{{ url($link['url'])}}" @if (!($loop->last)) class="group" @endif>
                            <x-dynamic-component :component="$link['name']" />
                            </a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </article>
</x-layout>
