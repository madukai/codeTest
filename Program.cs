using System;
using System.Collections.Generic;

namespace Test_Code
{
    class MainClass
    {
        public static void Main(string[] args)
        {
			List<List<int>> outerlist = new List<List<int>>();

			ProcessList(outerlist);
        }

		public static void ProcessList(List<List<int>> ol) {

			int[] marks = new int[12] { 1, 12, 7, 0, 3, 11, 52, 31, 61, 69, 70, 2 };

            // create a list
			List<int> innerList = new List<int>();
            // push the first element of the array to the created list
			innerList.Add(marks[0]);
			// push the created list on to another list (2D array)
			ol.Add(innerList);

			// Iterate through each element of the array 
			for (int i = 1; i < marks.Length; i++)
			{
				// Iterate through list
				int size = ol.Count;
				Boolean isPush = true;
				for (int j = 0; j < size; j++)
				{
					int lastEle = ol[j].Count - 1;
					// check if current element of the array is bigger than 
					if (marks[i] > ol[j][lastEle])
					{
						// push that element
						ol[j].Add(marks[i]);
						// set to false
						isPush = false;
						// set j bigger than size to exit loop
                        //j = size + 1;
					}

				}
                // check if need to create a new list
				if(isPush) {
					List<int> tList = new List<int>();
					tList.Add(marks[i]);
					ol.Add(tList);
				}
			}

			// Iterate through each outer list and get count for each inner list
			for (int k = 0; k < ol.Count; k++) {
				// get count 
				int len = ol[k].Count;
				// print result
				Console.WriteLine("Count {k} : " + len.ToString());
			}
		}
    }
}
