using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace task7
{
    public partial class Form1 : Form
    {
        List<string> l1;

        string selectedItemText;

        int selectedIndex;

        public Form1()
        {
            InitializeComponent();

            l1 = new List<string>();
            l1.Add("Apple");
            l1.Add("Orange");
            l1.Add("Banana");
            l1.Add("Pineapple");
            l1.Add("Peach");
            l1.Add("Pear");
            l1.Add("Avocado");

            listBox1.DataSource = l1;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            selectedItemText = listBox1.SelectedItem.ToString();
            selectedIndex = listBox1.SelectedIndex;

            listBox2.Items.Add(selectedItemText);

            if (l1 != null)
            {
                l1.RemoveAt(selectedIndex);
            }
            DataBinding();
        }

        private void DataBinding()
        {
            listBox1.DataSource = null;
            listBox1.DataSource = l1;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            selectedItemText = listBox2.SelectedItem.ToString();
            selectedIndex = listBox2.SelectedIndex;
            
            l1.Add(selectedItemText);

            listBox2.Items.RemoveAt(listBox2.Items.IndexOf(listBox2.SelectedItem));

            DataBinding();
        }
    }
}
