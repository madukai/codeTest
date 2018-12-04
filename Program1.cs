using System;
using System.Collections;

namespace Project_5
{
    class MainClass
    {
        public static void Main(string[] args)
        {
			// getting two sum
			int k = 23;

			if(FindTS(k)) {
				System.Console.WriteLine("Present");
			}
			else {
				System.Console.WriteLine("Not Present");
			}
        }

        // function to find the numbers
		public static bool FindTS(int s) {

			int [] nums = { 12, 2, 3, 7, 5, 4};
			Array.Sort(nums);

			int l = 0;
			int r = nums.Length - 1;
			Boolean result = false;

			while(l < r) {
				int td = nums[l] + nums[r];
                // check if found
				if(td == s){
					result = true;
					break;
				}
				else if(td > s) {
					r--;
				}
				else {
					l++;
				}
			}

			return result;
		}
    }
}
